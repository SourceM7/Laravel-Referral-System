<x-guest-layout>

<form action="" class="p-6 text-center sapce-y-6">



<p>you have been referred by {{$referralCode->user->name}}</p>
<x-primary-button>Sign Up for a discount</x-primary-button>
</form>
@csrf
</x-guest-layout>
