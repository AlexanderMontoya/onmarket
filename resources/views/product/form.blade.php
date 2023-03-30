<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_product') }}
            {{ Form::text('name_product', $product->name_product, ['class' => 'form-control' . ($errors->has('name_product') ? ' is-invalid' : ''), 'placeholder' => 'Name Product']) }}
            {!! $errors->first('name_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('description_product') }}
            {{ Form::text('description_product', $product->description_product, ['class' => 'form-control' . ($errors->has('description_product') ? ' is-invalid' : ''), 'placeholder' => 'Description Product']) }}
            {!! $errors->first('description_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('stock_product') }}
            {{ Form::text('stock_product', $product->stock_product, ['class' => 'form-control' . ($errors->has('stock_product') ? ' is-invalid' : ''), 'placeholder' => 'Stock Product']) }}
            {!! $errors->first('stock_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            <label for="category_product">Categoria</label>
            <select class="form-control" name="category_product" id="category_product">
                <option>Seleccione una categoria</option>
            <?php foreach($categories as $category){?>
                <option value="{{$category->id_name_category}}" 
                <?php 
                    if($category->id_name_category==$product->category_product):
                        echo 'selected';
                    endif;
                ?>>
                    {{$category->description_category}}
                </option>
            <?php }?>
            </select>
            {!! $errors->first('category_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('price_product') }}
            {{ Form::text('price_product', $product->price_product, ['class' => 'form-control' . ($errors->has('price_product') ? ' is-invalid' : ''), 'placeholder' => 'Price Product']) }}
            {!! $errors->first('price_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('image_product') }}
            <?php if($product->image_product!=null){?>
            <img src="{{ asset('storage').'/'.$product->image_product }}" alt="Producto OnMarket"><br>
            <?php }?>
            <input type="file" name="image_product" value="{{ $product->image_product }}" id="image_product">
            {!! $errors->first('image_product', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>