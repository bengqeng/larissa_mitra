<h3>Halo, {{ $user->full_name }}.</h3>

<p>Selamat datang di <a href="{{route('public.index')}}">{{ config('app.name') }}</a></p>
<p>Silahkan klik tombol di bawah ini untuk melanjutkan pembuatan akun anda</p>

<a href="{{ route('public.login', ['token' => $token ]) }}" class="btn btn-success"> Verify </a>
<br>
<br>
Terima kasih,
<br>
{{ config('app.name') }}
