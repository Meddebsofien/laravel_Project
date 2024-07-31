@if ($activeForm === 'identity')
    <livewire:components.form-identity :active="$activeForm" />
@endif
@if ($activeForm === 'question')
    <livewire:components.form-question />

    <livewire:components.navigation-form />
@endif
@if ($activeForm === 'addUser')
    <livewire:components.add-user />

    <div class="pr-10">
        <livewire:components.navigation-form />

    </div>
@endif
@if ($activeForm === 'card')
    <livewire:components.form-card />
    <div class="bg-white2 text-center mt-10 ml-24" style="width: 170px; height : 51px; ">
        <button wire:click="showconfirmation"
            class="bg-white text-backSingin font-bold text-xl-center rounded-md drop-shadow-md"
            style="width: 170px; height : 51px; top: 714px; left: 133px; ">
            VALIDATION
        </button>
    </div>
@endif






</div>









</div>
