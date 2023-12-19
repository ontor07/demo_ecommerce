<?php

namespace App\DataTables;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MenuDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                $editBtn = "<a href='".route('admin.menu.edit',$query->id)."' class='btn btn-icon btn-primary' ><i class='far fa-edit'></i></a>";
               $deleteBtn = "<a href='".route('admin.menu.destroy',$query->id)."' class='btn btn-icon btn-danger ml-2 delete-item' ><i class='fa fa-trash'></i></a>";
               return $editBtn.$deleteBtn;
            })
            ->addColumn('icon', function($query){
                return $icon = "<i class='".$query->icon ."' ></i> ";
            })
            ->addColumn('status', function($query){
                $active ='<div class="badge badge-success">Active</div>';
                $inactive ='<div class="badge badge-danger">Not Active</div>';
                if($query->status == 1)
                {
                    return $active;
                } 
                else{
                    return $inactive;
                }
            })
            ->rawColumns(['icon','action','status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Menu $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('menu-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            
            Column::make('id'),
            // Column::make('Parent'),
            Column::make('menu_name_en'),
            Column::make('icon'),
            Column::make('route_name'),
            Column::make('order_by'),
            Column::make('status'),
          
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
           
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Menu_' . date('YmdHis');
    }
}
