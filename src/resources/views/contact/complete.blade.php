<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('CONTACT') }}
    </h2>
  </x-slot>

  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">お問い合わせの受付が完了いたしました。</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base ">問い合わせ頂いた内容を確認後、担当者よりご連絡させていただきます。いましばらくお待ちください。</p>
      </div>
<div class="lg:w-1/2 md:w-2/3 mx-auto">
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(session('message'))
  <div class="bg-blue-300 w-1/2 mx-auto p-2 mb-4 text-white">
    {{ session('message' )}}
  </div>
@endif
        <form method="POST" action="{{ route('contact.store') }}">
        @csrf
          
              </span>
            </div>
          </div>
        </div>
        </from>
    </div>
  </section>
</x-app-layout>

