@extends('layouts.app')

@section('title', 'Оплата')

@section('content')
<div class="min-h-screen relative bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-50 via-slate-100 to-slate-200">
    <!-- Enhanced Enterprise-Grade Header -->
    <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-white py-8 lg:py-12 relative overflow-hidden">
        <!-- Refined animated background pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\" 30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-20 animate-[pulse_4s_ease-in-out_infinite]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-8">
                <div class="relative">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="flex -space-x-1">
                            @foreach(['visa', 'mastercard', 'mir'] as $card)
                            <div class="w-12 h-8 bg-white/10 backdrop-blur-sm rounded-lg border border-white/10 flex items-center justify-center transform hover:translate-y-[-2px] transition-all duration-300">
                                <img src="{{ asset('images/cards/' . $card . '.svg') }}" alt="{{ $card }}" class="h-4">
                            </div>
                            @endforeach
                        </div>
                        <div class="h-6 w-px bg-white/20"></div>
                        <div class="flex items-center px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full animate-[pulse_2s_ease-in-out_infinite] mr-2"></span>
                            <span class="text-emerald-400 text-sm font-medium">{{ __('Система активна') }}</span>
                        </div>
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-light tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white to-white/80 mb-2">
                        {{ __('Безопасный платеж') }}
                    </h1>

                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-slate-300">{{ __('Защита SSL') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span class="text-slate-300">{{ __('3D-Secure') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span class="text-slate-300">{{ __('PCI DSS') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Security Status -->
                <div class="flex items-center gap-6">
                    <div class="hidden lg:block h-16 w-px bg-gradient-to-b from-transparent via-slate-700/50 to-transparent"></div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col items-center p-4 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10">
                            <div class="text-emerald-400 font-mono text-lg">256-bit</div>
                            <div class="text-xs text-slate-400">{{ __('Шифрование') }}</div>
                        </div>
                        <div class="flex flex-col items-center p-4 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10">
                            <div class="text-emerald-400 font-mono text-lg">99.9%</div>
                            <div class="text-xs text-slate-400">{{ __('Uptime') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Main Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-16">
        <!-- Merchant Info with Premium Glass Effect -->
        <div class="relative -mt-16 sm:-mt-20 mb-12">
            <div class="inline-flex flex-wrap sm:flex-nowrap items-center gap-6 bg-white/95 backdrop-blur-2xl 
                        rounded-2xl px-6 sm:px-8 py-6 shadow-[0_8px_32px_rgba(0,0,0,0.12)] border border-white/20">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-slate-50 to-slate-100 p-0.5 shrink-0 
                           shadow-[0_4px_12px_rgba(0,0,0,0.08)]">
                    <div class="w-full h-full rounded-lg bg-white flex items-center justify-center p-3 
                               transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset('storage/' . $shop->logo) }}" alt="{{ $shop->title }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap items-center gap-6 sm:divide-x divide-slate-200">
                    <div>
                        <span class="block text-sm text-slate-500 mb-1">{{ __('Вам выставлен счет от') }}
                            <span class="text-xl text-emerald-600 font-medium">{{ $shop->title }}</span>
                        </span>
                    </div>
                    <div class="pl-0 sm:pl-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center
                                  shadow-[0_2px_8px_rgba(16,185,129,0.2)]">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-sm text-emerald-700 font-medium">
                                {{ __('Верифицированный продавец') }}
                            </span>
                            <span class="text-xs text-slate-500">{{ $shop->base_url }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 gap-6 lg:gap-10">
            <!-- Enhanced Main Payment Column -->
            <div class="lg:col-span-8 space-y-6">
                <!-- Payment Info Card with Enhanced Design -->
                <div class="bg-white/90 backdrop-blur-2xl rounded-3xl shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-white/20 
                            overflow-hidden hover:shadow-[0_12px_32px_rgba(0,0,0,0.12)] transition-all duration-500
                            relative before:absolute before:inset-0 before:bg-gradient-to-br before:from-white/60 before:to-white/20 
                            before:rounded-3xl before:-z-10">
                    <div class="p-6 sm:p-8 lg:p-10">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-2xl sm:text-3xl font-extralight text-slate-800">
                                {{ __('Информация о платеже') }}
                            </h2>
                            <span class="inline-block w-2 h-2 bg-emerald-400 rounded-full animate-[pulse_2s_ease-in-out_infinite]"></span>
                        </div>

                        <dl class="space-y-6">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 py-4 border-b border-slate-100
                                      group transition-colors duration-300 hover:bg-slate-50/50">
                                <dt class="text-slate-500 font-medium">{{ __('ID транзакции') }}</dt>
                                <dd class="sm:ml-auto font-mono text-base sm:text-lg text-slate-800 bg-slate-50 px-4 py-2 rounded-lg
                                         transition-colors duration-300 group-hover:bg-white">
                                    {{ $data->order }}
                                </dd>
                            </div>

                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 py-4 border-b border-slate-100
                                      group transition-colors duration-300 hover:bg-slate-50/50">
                                <dt class="text-slate-500 font-medium">{{ __('Получатель платежа') }}</dt>
                                <dd class="sm:ml-auto font-medium text-base sm:text-lg text-slate-800">
                                    {{ $shop->base_url }}
                                </dd>
                            </div>

                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 py-4
                                      group transition-colors duration-300 hover:bg-slate-50/50">
                                <dt class="text-slate-500 font-medium">{{ __('Сумма к оплате') }}</dt>
                                <dd class="sm:ml-auto flex items-baseline gap-2">
                                    <span class="text-3xl sm:text-4xl font-light text-slate-900 group-hover:text-emerald-600 
                                               transition-colors duration-300">{{ $data->amount }}</span>
                                    <span class="text-sm text-slate-500 font-medium">{{ __($data->currency) }}</span>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Enhanced Payment Methods -->
                <form method="POST" action="{{ route('api.pay') }}" class="space-y-6">
                    @csrf
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl font-light text-slate-800">{{ __('Способ оплаты') }}</h3>
                        <div class="flex -space-x-2">
                            @foreach(['visa', 'mastercard', 'mir'] as $card)
                            <div class="w-14 h-9 bg-white rounded-xl flex items-center justify-center shadow-md 
                                      hover:-translate-y-0.5 transition-transform">
                                <img src="{{ asset('images/cards/' . $card . '.svg') }}" alt="{{ $card }}" class="h-4">
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 gap-3">
                        @foreach($paymentSystems as $paymentSystem)
                        <label class="relative block cursor-pointer">
                            <input type="radio" name="payment_system" value="{{ $paymentSystem->id }}" class="peer sr-only" />
                            <div class="relative bg-white p-4 rounded-xl border-2 border-slate-200 
                transition-all duration-300
                hover:border-slate-300 hover:shadow-lg
                peer-checked:border-emerald-500 peer-checked:bg-emerald-100 peer-checked:shadow-xl peer-checked:-translate-y-1">
                                <div class="flex items-start gap-3">
                                    <!-- Логотип -->
                                    <div class="shrink-0 w-10 h-10 rounded-lg bg-slate-50 p-2">
                                        <img src="{{ asset('storage/' . $paymentSystem->logo) }}"
                                            alt="{{ $paymentSystem->title }}"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Контент -->
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="text-sm font-medium text-slate-900 truncate pr-2">
                                                {{ $paymentSystem->title }}
                                            </h4>
                                            <!-- Круг с галочкой -->
                                            <div class="relative w-5 h-5">
                                                <svg class="absolute w-4 h-4 text-emerald-600"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-xs text-slate-500 truncate">
                                            {{ $paymentSystem->description }}
                                        </p>

                                        <!-- Дополнительные фичи -->
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="inline-flex items-center text-emerald-600 text-[10px] bg-emerald-50 
                                px-1.5 py-0.5 rounded-full">
                                                <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                {{ __('Быстро') }}
                                            </span>
                                            <span class="inline-flex items-center text-emerald-600 text-[10px] bg-emerald-50 
                                px-1.5 py-0.5 rounded-full">
                                                <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                </svg>
                                                {{ __('Безопасно') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>

                        @endforeach
                    </div>


                    @error('payment_system')
                    <div class="rounded-lg bg-red-50 border border-red-100 p-4">
                        <div class="flex items-center text-sm text-red-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror

                    <!-- Payment Button -->
                    <div class="pt-6">
                        <button type="submit"
                            class="w-full bg-slate-900 text-white px-8 py-4 rounded-xl text-lg font-medium
                                   shadow-lg hover:bg-slate-800 hover:-translate-y-0.5
                                   transition-all focus:outline-none focus:ring-2 focus:ring-slate-900/20">
                            <span class="flex items-center justify-center gap-3">
                                {{ __('Оплатить') }} {{ $data->amount }} {{ __($data->currency) }}
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </button>

                        <div class="flex items-center justify-center mt-4 text-xs text-slate-500">
                            <svg class="w-4 h-4 mr-1.5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            {{ __('Безопасная оплата с шифрованием данных') }}
                        </div>
                    </div>
                </form>
            </div>

            <!-- Enhanced Security Sidebar -->
            <div class="lg:col-span-4">
                <div class="sticky top-8">
                    <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-3xl p-8 lg:p-10 
                               shadow-[0_8px_32px_rgba(0,0,0,0.15)] relative overflow-hidden group">
                        <!-- Enhanced Background Pattern -->
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\" 30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-20"></div>

                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/5 to-emerald-600/0 opacity-0 
                                  group-hover:opacity-100 transition-opacity duration-700"></div>

                        <!-- Enhanced Security Content -->
                        <div class="relative">
                            <!-- Status Indicator -->
                            <div class="absolute -top-4 -right-4">
                                <div class="w-3 h-3 rounded-full bg-emerald-400 animate-[pulse_2s_ease-in-out_infinite]"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-400 absolute top-0"></div>
                            </div>

                            <h3 class="text-2xl font-light mb-8">{{ __('Гарантии безопасности') }}</h3>

                            <div class="space-y-6">
                                @foreach([
                                [
                                'title' => 'PCI DSS Сертификация',
                                'description' => 'Соответствие международным стандартам безопасности платежей'
                                ],
                                [
                                'title' => '3-D Secure 2.0',
                                'description' => 'Дополнительный уровень защиты для всех транзакций'
                                ],
                                [
                                'title' => 'Антифрод система',
                                'description' => 'Мониторинг и предотвращение мошеннических операций'
                                ]
                                ] as $security)
                                <div class="group/item flex items-start gap-4 transition-all duration-300 
                                          hover:translate-x-2">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm 
                                              border border-white/5 shadow-[0_4px_16px_rgba(0,0,0,0.1)]
                                              flex items-center justify-center group-hover/item:bg-white/15
                                              transition-all duration-300 group-hover/item:shadow-[0_8px_24px_rgba(0,0,0,0.15)]">
                                        <svg class="w-6 h-6 text-emerald-400 transition-transform duration-300 
                                                  group-hover/item:scale-110"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-medium text-white transition-colors duration-300 
                                                  group-hover/item:text-emerald-400">
                                            {{ __($security['title']) }}
                                        </h4>
                                        <p class="mt-2 text-sm text-slate-400 leading-relaxed transition-colors duration-300 
                                                  group-hover/item:text-slate-300">
                                            {{ __($security['description']) }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach

                                <!-- Enhanced Session Timer -->
                                <div class="pt-6 mt-6 border-t border-slate-700/50">
                                    <div class="flex items-center justify-between px-4 py-3 bg-slate-800/50 
                                              backdrop-blur-xl rounded-xl border border-white/5">
                                        <span class="text-sm text-slate-400">{{ __('Время сессии:') }}</span>
                                        <span class="font-mono text-lg text-emerald-400 tabular-nums tracking-wider">14:59</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Section -->
                    <div class="mt-6 bg-white/90 backdrop-blur-xl rounded-xl p-6 shadow-[0_4px_16px_rgba(0,0,0,0.08)] 
                               border border-white/20">
                        <div class="flex items-center gap-3 mb-4">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            <span class="text-sm font-medium text-slate-600">{{ __('Поддержка 24/7') }}</span>
                        </div>
                        <p class="text-xs text-slate-500">
                            {{ __('Если у вас возникли вопросы, наша служба поддержки всегда готова помочь') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection