@component('mail::message')
# Selamat Datang {{  $user->full_name }}

Silahkan lakukan verifikasi akun anda dengan cara klik tombol di bawah

@component('mail::button', ['url' => 'https://localhost:8000'])
Verify
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
