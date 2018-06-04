<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addIndexColumn()
            ->addColumn('edit', 'admin.user.btn.edit')
            ->addColumn('delete', 'admin.user.btn.delete')
            ->rawColumns([
                'edit','delete'
            ]);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return User::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
//                    ->addAction(['width' => '80px'])
//                    ->parameters($this->getBuilderParameters());
            ->parameters([
                'dom'=>"B<'row'<'col-md-6'f><'col-md-6'l>>rt<'row'<'col-md-6'i><'col-md-6'p>>",
                'lengthMenu'=>[
                    [10,25,50,-1]
                    ,[10,25,50,'All Records']
                ],
                'buttons'=>[
                    [
                        'extend' =>'create',
                        'text'=>'<i class="fa fa-plus">  Add User</i>',
                        'className'=>'form-group btn btn-info ml-2',
                    ],
                ],

                "initComplete"=> "function () {
                            this.api().columns([0,1,2,3,4,5]).every(function () {
                                var column = this;
                                var input = document.createElement(\"input\");
                                $(input).appendTo($(column.footer()).empty())
                                $(input).attr( 'style', 'text-align: center;width: 100%')
//                                $(input).attr( 'class','form-control')
                                .on('keyup', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",



            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        $SrName = 1;
        $SrName++;
        return [

            [
            'name'  => 'id',
            'data'  => 'DT_Row_Index',
            'title' => '#'
        ],

            [
                'name'  => 'name',
                'data'  => 'name',
                'title' => 'Name'
            ],
            [
                'name'  => 'email',
                'data'  => 'email',
                'title' => 'Email'
            ],
            [
                'name'  => 'phone',
                'data'  => 'phone',
                'title' => 'phone #'
            ],
            [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => 'Created_at'
            ],
            [
                'name'  => 'updated_at',
                'data'  => 'updated_at',
                'title' => 'Updated_at'
            ],
            [
                'name'       => 'edit',
                'data'       => 'edit',
                'title'      => 'Edit',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],
            [
                'name'       => 'delete',
                'data'       => 'delete',
                'title'      => 'Delete',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
