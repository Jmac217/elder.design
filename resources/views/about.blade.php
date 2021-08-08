<a href="/">Home</a>
Welcome to the about page!

@foreach($messages as $message)
{{ $message->text }}
@endforeach
