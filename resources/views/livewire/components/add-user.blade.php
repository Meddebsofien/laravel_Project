<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">


        <div class="bg-white rounded-lg flex justify-center drop-shadow-md  " style="height: 60px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    OTHER


                </div>
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    GUESTS
                </div>

            </div>
        </div>






    </div>
    <div style="height: 470px ; width:350px ;  margin-left:50px;  margin-top:40px ; border-radius: 6px; ">


        <div class="  p-2 bg-white2  shadow-md " style="height: 530px ; width:350px ;">
            <div class=" inline-flex bg-white2  shadow-sm" role="group">
                <button wire:click="showFormidentity" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg text-teal-800 bg-white2   shadow cursor-pointer hover:bg-gray-200 
                     ">
                    <i class="fas fa-user-cog"></i>
                </button>
                <button wire:click="showFormquestion" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  text-teal-800 bg-white2 shadow cursor-pointer hover:bg-gray-200 
                    ">
                    <i class="fas fa-question-circle"></i>
                </button>
                <button wire:click="showFormadduser" style="width: 83px; height: 54px;"
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg   bg-cyan-700 text-white2  shadow cursor-pointer hover:bg-gray-200 
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
                        <div class="font-inter text-xl font-semibold  text-backSingin">OTHER GUESTS </div>

                        <div class="   w-64">
                            <div class="mb-4">

                                <div class="mt-2">
                                    <label class="block mb-2  text-backSingin font-semibold">Choose an option</label>
                                    <div class="font-semibold text-backSingin">I travel :</div>
                                    <div class="flex flex-row">

                                        <div class="flex items-center ml-8 mt-2">
                                            <input id="alone" name="travel" type="radio"
                                                wire:model.defer="travelwith" value="alone"
                                                wire:input="updateAndValidate('travel', $event.target.value)"
                                                class="form-radio w-5 h-5 bg-white2 text-backSingin rounded" />
                                            <label for="alone" class="ml-2 text-backSingin">Alone</label>
                                        </div>
                                        <div class="flex items-center ml-20 mt-3 ">
                                            <input id="with-guests" name="travel" type="radio"
                                                wire:model.defer="travelwith" value="withguest"
                                                wire:input="updateAndValidate('travel', $event.target.value)"
                                                class="form-radio  w-5 h-5 bg-white2 text-backSingin rounded" />
                                            <label for="with-guests" class="ml-2 text-backSingin text-center ">With
                                                Guests</label>
                                        </div>

                                    </div>
                                    @error('travelwith')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-6 ml-12 flex flex-col items-center justify-center">
                                <h3 class="text-lg text-backSingin font-semibold">GUESTS</h3>
                                <div class="flex items-center mt-2">
                                    <button wire:click="decrement" type="button"
                                        class="px-1 py-1 text-3xl bg-white rounded-md font-semibold flex items-center justify-center"
                                        style="width: 60px; height: 60px;"{{ $travelwith === 'alone' ? 'disabled' : '' }}>-</button>

                                    <div class="mx-1 text-2xl bg-white font-semibold rounded-md flex items-center justify-center"
                                        style="width: 60px; height: 60px;">{{ $nbguest }}
                                    </div>
                                    <button wire:click="increment" type="button"
                                        class="px-1 py-1 text-3xl bg-white rounded-md font-semibold flex items-center justify-center"
                                        style="width: 60px; height: 60px;"
                                        {{ $travelwith === 'alone' ? 'disabled' : '' }}>+</button>
                                </div>

                            </div>

                            <div>

                                <h3 class="text-lg mt-8 p-0 text-backSingin font-semibold">TOURIST TAXES</h3>
                                <div class="mt-2 text-backSingin  " style="width: 334px ; font-size: 10px;">The city of
                                    {{ $propertyAdd->city }} requires that
                                    these fees be collected
                                    from each customer.</div>
                                <p class="mt-2 text-sm text-backSingin">XX.XX € per guest per day</p>
                                <div class="mt-2 ml-10 flex flex-col justify-around">
                                    <p class="text-lg font-semibold text-backSingin">Total: <span
                                            class="inline-block ml-8 rounded bg-white px-2 text-backSingin">XX.XX€</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-3  pt-8">
                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFormquestion' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Back</button>

                        </div>

                        <div
                            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
                            <button wire:click='showFormcard' type="button"
                                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Next</button>

                        </div>


                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
