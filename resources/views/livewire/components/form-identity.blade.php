<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">


        <div class="bg-white rounded-lg flex justify-center drop-shadow-md  " style="height: 60px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    IDENTITY


                </div>
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    VERIFICATION
                </div>

            </div>
        </div>






    </div>
    <div style="height: 470px ; width:350px ;  margin-left:50px;  margin-top:40px ; border-radius: 6px; ">


        <div class="  p-2 bg-white2  shadow-md " style="height: 530px ; width:350px ;">
            <div class=" inline-flex bg-white2  shadow-sm" role="group">
                <button wire:click="showFormidentity" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg   shadow cursor-pointer hover:bg-gray-200 
                     bg-cyan-700 text-white2 ">
                    <i class="fas fa-user-cog"></i>
                </button>
                <button wire:click="showFormquestion" style="width: 83px; height: 54px;" type="submit"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  text-teal-800 bg-white2 shadow cursor-pointer hover:bg-gray-200 
                    ">
                    <i class="fas fa-question-circle"></i>
                </button>
                <button wire:click="showFormadduser" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  text-teal-800 bg-white2 shadow cursor-pointer hover:bg-gray-200 
                     ">
                    <i class="fas fa-user-plus"></i>
                </button>
                <button wire:click="showFormcard" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  text-teal-800 bg-white2 shadow cursor-pointer hover:bg-gray-200 
                     ">
                    <i class="fas fa-credit-card"></i>
                </button>
            </div>

            <div class="p-2">


                <form wire:submit.prevent="submit" class="space-y-4">

                    <div style="width:350px ; height:470px ;">
                        <div class="font-inter text-xl font-semibold  text-backSingin">IDENTITY VERIFICATION </div>
                        <div>
                            <label for="name" class="block text-sm font-medium text-backSingin">Name</label>
                            <input type="text" wire:model.defer ="name"
                                wire:input="updateAndValidate('name', $event.target.value)" id="name"
                                class="mt-1 block shadow-sm sm:text-sm {{ $errors->has('name') ? 'border-red-600' : 'border-gray-300' }} rounded-md"
                                style="width:310px;"
                                placeholder="{{ $errors->has('name') ? $errors->first('firstName') : '' }}" />
                            @error('name')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>



                        <div>
                            <label for="email" class="block text-sm font-medium text-backSingin">Email</label>
                            <input type="email" wire:model.defer="email" id="email"
                                class="mt-1 block  shadow-sm sm:text-sm border-gray-300 rounded-md {{ $errors->has('email') ? 'border-red-600 ' : 'border-gray-300' }}"
                                style="width:310px;" wire:input="updateAndValidate('email', $event.target.value)" />

                            @error('email')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-backSingin">Phone</label>
                            <input type="text" wire:model="phone" id="phone"
                                class="mt-1 block  shadow-sm sm:text-sm border-gray-300 rounded-md {{ $errors->has('phone') ? 'border-red-600 ' : 'border-gray-300' }}"
                                style="width:310px;" />
                            @error('phone')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="idCard" class="block text-sm font-medium text-backSingin">ID Card</label>
                            <input type="text" wire:model="idCard" id="idCard"
                                class="mt-1 block  shadow-sm sm:text-sm border-gray-300 rounded-md {{ $errors->has('idCard') ? 'border-red-600 ' : 'border-gray-300' }}"
                                style="width:310px;" />
                            @error('idCard')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="font-inter text-xl font-semibold  text-backSingin">INFORMATIONS SUR L'ARRIVEE </div>


                        <div>
                            <label for="arrivalTime" class="block text-sm font-medium text-backSingin">Heure
                                d'Arrivée</label>
                            <input type="text" wire:model="arrivalTime" id="arrivalTime"
                                class="mt-1 block  shadow-sm sm:text-sm border-gray-300 rounded-md {{ $errors->has('arrivalTime') ? 'border-red-600 ' : 'border-gray-300' }}"
                                style="width:310px;" />
                            @error('arrivalTime')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="flex flex-row space-x-3  pt-8">
                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFprecheck' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Back</button>

                        </div>

                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFormquestion' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Next</button>

                        </div>


                    </div>


                </form>


            </div>
        </div>
    </div>
</div>
