@if(is_null($vehicle))
    <div>Unable to fetch vehicle details</div>
@else
    <html>
        <head>
            <title>Vehicle location | {{$vehicle->licensePlate}}</title>
        </head>

        <body>
            <p>License plate: {{$vehicle->licensePlate}}</p>
            <p>Location: {{$vehicle->location}}</p>
        </body>
    </html>
@endif