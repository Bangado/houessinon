@props([
    'label',
    'classLabel' => '',
    'classe' => '',
    'for',
    'error' => false,
    'displayErorr' => false,
    'helpText' => false,
    'inline' => false,
    'paddingless' => false,
    'borderless' => false,
    'required' => false,
])

@if ($inline)
    <div class="{{ $classe }} mt-2">
        <x-label required="{{ $required }}" for="{{ $for }}"
            class="text-sm {{ $classLabel }}">
            {{ $label }} @if ($required) <span class="text-red-500"> (*)</span>  @endif
                
        </x-label>

        <div class="relative rounded-md">
            {{ $slot }}
            @if ($error)
                <div class="text-red-800 text-sm flex">
                    <svg class="pr-1 text-sm" width="20" height="20" viewBox="0 0 15 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1263_10078)">
                            <path
                                d="M7.5 10V7.5M7.5 5H7.50625M13.75 7.5C13.75 10.9518 10.9518 13.75 7.5 13.75C4.04822 13.75 1.25 10.9518 1.25 7.5C1.25 4.04822 4.04822 1.25 7.5 1.25C10.9518 1.25 13.75 4.04822 13.75 7.5Z"
                                stroke="rgba(168, 16, 27, 0.71)" stroke-opacity="0.71" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1263_10078">
                                <rect width="15" height="15" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    {{ $error }}
                </div>
            @endif
            @if ($helpText)
                <p class="text-sm text-gray-500">{{ $helpText }}</p>
            @endif
        </div>
    </div>
@else
    <div
        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start {{ $borderless ? '' : ' sm:border-t ' }} sm:border-gray-200 {{ $paddingless ? '' : ' sm:py-5 ' }}">
        <label for="{{ $for }}" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
            {{ $label }}
        </label>

        <div class="mt-1 sm:mt-0 sm:col-span-2">
            {{ $slot }}

            @if ($error)
                <div class="mt-1 text-red-500 text-sm">{{ $error }}</div>
            @endif

            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif
        </div>
    </div>
@endif
