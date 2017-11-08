<div class="col-md-12 mb-3 list-categories">
    @foreach($categories as $category)
        <button type="button" class="btn btn-secondary category-btn" data-url="{{url('webshop?cate='.$category->category_name)}}" style="font-size: 18px;">
            {{ $category->category_name }}
        </button>
    @endforeach
</div>
