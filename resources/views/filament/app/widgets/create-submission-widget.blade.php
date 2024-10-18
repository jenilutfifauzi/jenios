<x-filament-widgets::widget>
    <x-filament::section
        class="flex flex-col justify-center items-center"
        :subheading="__('Create Submission Widget Subheading')">
        <div class="mt-8">
            <div class="flex flex-col justify-center items-center mt-2">
                <div class="flex justify-center items-center mt-2">
                    <h1 class="text-2xl font-bold text-gray-800">Jenios.</h1>
                </div>
                <div class="flex justify-center items-center mt-2 mb-4">
                    <Image src="{{ asset('assets/images/undraw_progressive_app_m-9-ms.svg') }}" alt="Jenios" 
                    height="200" width="200"
                    />
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center mt-2">
            <x-filament::card>
                <div class="mt-8">
                    <p class="text-center text-sm text-gray-700">Silahkan ajukan sistem dan mendapatkan bonus cashback 10% dari kami.</p>
                    <div class="flex justify-center items-center mt-2">
                        <x-filament::button size="xs" href="{{ route('filament.app.resources.submissions.index') }}"
                            tag="a" tooltip="Ajukan sistem dan dapatkan bonus cashback 10%" column-span="12">
                            Buat Pengajuan Sistem
                        </x-filament::button>
                    </div>
                </div>
            </x-filament::card>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>