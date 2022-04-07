<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('CONTACT') }}
    </h2>
  </x-slot>

  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">お問合せ内容の確認</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ご記入いただきました内容をご確認の上、送信ボタンを押してください。</p>
      </div>
<div class="lg:w-1/2 md:w-2/3 mx-auto">
        
        <form method="POST" action="{{ route('contact.complete') }}">
        @csrf
        {{ $input->name }}
        {{ $input->email }}
        {{ $input->message }}
        <input type="hidden" name="name" value="{{ $input->name }}">
        <input type="hidden" name="email" value="{{ $input->email }}">
        <input type="hidden" name="message" value="{{ $input->message }}">

        <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">送信</button>
            </div>
          
              </span>
            </div>
          </div>
        </div>
        </from>
    </div>
  </section>
</x-app-layout>

