@extends('layout.auth_layout')
@section('authContent')
<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <form class="space-y-6" action="#" method="POST">
    <div>
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
      <div class="mt-2">
        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div>
      <div class="flex items-center justify-between">
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="text-sm">
          <a href="#" class="font-semibold text-blue-600 hover:text-blue-500">Forgot password?</a>
        </div>
      </div>
      <div class="mt-2">
        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div>
      <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
    </div>
  </form>
  <div class="mt-5 flex items-center justify-center gap-5">
    <hr class="h-0.5 w-full bg-slate-100">
      <p class="text-sm text-slate-400">Or</p>
    <hr class="h-0.5 w-full bg-slate-100">
  </div>
  <p class="mt-10 text-center text-sm text-gray-500">
    Not a member?
    <a href="{{ route('register') }}" wire:navigate class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Register</a>
  </p>
</div>
@endsection
