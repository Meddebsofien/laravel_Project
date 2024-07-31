<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">


        <div class="bg-white rounded-lg flex justify-center drop-shadow-md  " style="height: 60px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    ADDITIONAL

                </div>
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    QUESTIONS
                </div>

            </div>
        </div>






    </div>
    <div style="height: 470px ; width:350px ;  margin-left:50px;  margin-top:40px ; border-radius: 6px; ">


        <div class="  p-2 bg-white2  shadow-md " style="height: 530px ; width:350px ;">
            <div class=" inline-flex bg-white2  shadow-sm" role="group">
                <button wire:click="showFormidentity" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  text-teal-800 bg-white2   shadow cursor-pointer hover:bg-gray-200 
                     ">
                    <i class="fas fa-user-cog"></i>
                </button>
                <button wire:click="showFormquestion" style="width: 83px; height: 54px;" type="submit"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  bg-cyan-700 text-white2 shadow cursor-pointer hover:bg-gray-200 
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


                <form class=" wire:submit.prevent="submit" class="space-y-4"">
                    <div style="width:350px ; height:470px ;">
                        <div class="font-inter text-xl font-semibold  text-backSingin">ADDITIONAL QUESTIONS </div>

                        <div class="mb-4">
                            <label class="flex items-center">

                                <span class="ml-2 text-sm font-bold text-backSingin">I won't smoke and party inside the
                                    rental</span>
                            </label>

                            <div
                                class="m-2 pl-4 pt-2 w-80 text-sm   font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-items-start
            ">
                                Agree

                                <div style="padding-left: 200px">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-backSingin rounded "
                                        wire:model="agree" value="{{ $agree ? '1' : '0' }}">

                                </div>


                            </div>


                            @error('agree')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Pet question -->
                        <div class="mb-4">
                            <label class="flex items-center">

                                <span class="ml-2 text-sm font-bold text-backSingin">Do you have any Pet?</span>
                            </label>

                            <div
                                class="m-2 pl-4 pt-2 text-sm  w-80 font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-items-start
            ">
                                oui
                                <div style="padding-left: 217px">
                                    <input type="radio" name="hasPet"
                                        class="form-radio h-5 w-5 text-backSingin rounded" wire:model="hasPet"
                                        value="1">
                                </div>

                            </div>

                            <div
                                class="m-2 pl-3 pt-2 text-sm  w-80 font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-items-start
        ">
                                non
                                <div style="padding-left: 217px">
                                    <input type="radio" name="hasPet"
                                        class="form-radio h-5 w-5 text-backSingin rounded" wire:model="hasPet"
                                        value="0">
                                </div>

                            </div>
                            @error('hasPet')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror



                        </div>

                        <!-- Number of guests question -->

                        <div class="mb-4">
                            <label class="flex items-center">

                                <span class="ml-2 text-sm font-bold text-backSingin">What is the reason of your
                                    trip?</span>
                            </label>

                            <div
                                class="m-2 pl-3 pt-2 text-sm  w-80 font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-start
            ">
                                holidays
                                <div class=" flex justify-end" style="padding-left: 190px">
                                    <input type="radio" name="tripReason"
                                        class="form-radio h-5 w-5 text-backSingin rounded" wire:model="tripReason"
                                        value="holidays">
                                </div>

                            </div>

                            <div
                                class="m-2 pl-3 pt-2 text-sm  w-80 font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-items-start
        ">
                                work
                                <div style="padding-left: 211px">
                                    <input type="radio" name="tripReason"
                                        class="form-radio h-5 w-5 text-backSingin rounded" wire:model="tripReason"
                                        value="work">
                                </div>

                            </div>
                            <div
                                class="m-2 pl-3 pt-2 text-sm  w-80 font-semibold  h-10 bg-white rounded-md text-backSingin shadow-md  flex justify-items-start
    ">
                                both
                                <div style="padding-left: 213px">
                                    <input type="radio" name="tripReason"
                                        class="form-radio h-5 w-5 text-backSingin rounded" wire:model="tripReason"
                                        value="both">
                                </div>

                            </div>

                            @error('tripReason')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="flex flex-row space-x-3  pt-8">
                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFormidentity' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Back</button>

                        </div>

                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFormadduser' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Next</button>

                        </div>


                    </div>
                </form>
                @if (session()->has('message'))
                    <div class="text-green-500">{{ session('message') }}</div>
                @endif
                @if (session()->has('error'))
                    <div class="text-red-500">{{ session('error') }}</div>
                @endif
            </div>

        </div>
    </div>
</div>
