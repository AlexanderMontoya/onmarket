<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_categoria') }}
            {{ Form::text('id_name_category', $category->id_name_category, ['class' => 'form-control' . ($errors->has('id_name_category') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('id_name_category', '<div class="invalid-feedback">:message</div>') !!}
            {{ Form::label('Descripcion') }}
            {{ Form::text('description_category', $category->description_category, ['class' => 'form-control' . ($errors->has('description_category') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Categoria']) }}
            {!! $errors->first('description_category', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>