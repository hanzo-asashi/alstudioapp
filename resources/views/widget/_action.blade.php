<a href="{{ $url_detail }}" class="btn btn-xs btn-flat btn-primary btn-show" title="Detail: {{
\App\Models\Pelanggan::getPelangganName($model->pelangganid) }}"><i
        class="fa fa-shopping-basket"></i></a>
<a href="{{ $url_edit }}" class="btn btn-xs btn-flat btn-success modal-show-edit" title="Edit {{
\App\Models\Pelanggan::getPelangganName($model->pelangganid) }}"><i
        class="fa fa-edit"></i> </a>
<a href="{{ $url_delete }}" onclick="$('#frmdelete').submit();" class="btn btn-xs btn-flat btn-danger btn-delete"
   title="{{ \App\Models\Pelanggan::getPelangganName($model->pelangganid) }}"><i class="fa fa-trash"></i>
    <form id="frmdelete" action="{{ $url_delete }}" method="POST" style="display:none;"></form>
</a>