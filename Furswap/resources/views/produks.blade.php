<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Here's a list of available products</h1>
            <table>
                <thead>
                    <td>Nama</td>
                    <td>jenis</td>
                    <td>foto</td>
                    <td>deskripsi</td>
                </thead>
                <tbody>
                    @foreach ($allProducts as $product)
                        <tr>
                            <td>{{ $product->nama }}</td>
                            <td class="inner-table">{{ $product->jenis }}</td>
                            <td class="inner-table">
                                <img src="images/{{$product->foto }}>
                            </td>
                            <td class="inner-table">{{ $product->deskripsi }}</td>
                        </tr>
                    @endforeach
</body>
</html>