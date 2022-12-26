@foreach($users as $user)
{{ dd($user->phone()->first()->number) }}
@endforeach
