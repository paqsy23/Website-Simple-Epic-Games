<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4>Hello {{$user->username}}</h4>
        <h3>Thank you for your recent transaction on Epic Game FAI.</h3>
        <h3>The game below have been added to your Epic Game FAI Library.</h3>
        <div class="row">
            <div class="col-md-3">
                @foreach ($game->img as $image)
                    @if (strpos($image->link, 'logo'))
                        <img width="300" height="300" src="{{ url('/storage/games/'.$image->link) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px">
                    @endif
                @endforeach
            </div>
            <div class="col-md-9">
                <p>{{$game->name}}</p>
                <p>Total : $ {{$game->price}}</p>
            </div>
        </div>
        <h5>This was submitted from IP Address: </h5>
        <h5>{{$ip}}</h5>
    </div>
</body>
</html>
