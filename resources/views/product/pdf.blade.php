<?php $i=1?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos PDF</title>
    <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<h2>Lista de Productos</h2>
<div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Stock</th>
										<th>Categoria</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $category=isset($_GET['categoria'])?$_GET['categoria']:'';?>
                                    @foreach ($datos as $product)
                                    <?php if ($category=='' || $product->category_product==$category){?>
                                        <tr>
                                            <td>{{ $i }}</td>
											<td>{{ $product->name_product }}</td>
											<td>{{ $product->description_product }}</td>
                                            <td>{{ $product->stock_product }}</td>
                                            <td>{{ $product->category_product }}</td>
											<td>{{ $product->price_product }}</td>
                                        </tr>
                                        <?php $i+=1?>
                                        <?php }?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>