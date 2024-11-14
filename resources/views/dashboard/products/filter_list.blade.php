@forelse($products as $index=>$product)
    <tr class="custom-show-table">
        <td> {{ $index + $products->firstItem() }} </td>
        <td class="custom-info"> {{ Str::limit($product->name ?? 'N/A', 55) }}</td>
        <td class="custom-info"> {{ Str::limit($product->name ?? 'N/A', 55) }}</td>
        <td class="custom-info"> {{ Str::limit($product->description ?? 'N/A', 55) }}</td>
        <td class="custom-info"> {{ Str::limit($product->price ?? 'N/A', 55) }}</td>

        <td scope="row" class="text-center">
            <a class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}" class=""><i
                    class="fa fa-eye"></i>View</a>


            <a class="btn btn-sm btn-info" href="{{ route('products.edit', $product->id) }}" class=""><i
                    class="fa fa-edit "></i>Edit</a>
            <a href="javascript:void(0)" class="delete-confirm btn btn-sm btn-danger" data-form="deleteForm-{{ $product->id }}">
                <i class="fa fa-trash"></i> Delete
            </a>
            <form id="deleteForm-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
@empty
    <tr class="text-center">
        <td colspan="12">
            No product found
        </td>
    </tr>
@endforelse
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
       document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-confirm').forEach(function (element) {
            element.addEventListener('click', function () {
                const formId = this.getAttribute('data-form');
                if (confirm('Are you sure you want to delete this item?')) {
                    document.getElementById(formId).submit();
                }
            });
        });
    });
</script>
<script>

</script>
