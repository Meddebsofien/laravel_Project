<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">
        <div class="bg-white rounded-lg flex justify-center drop-shadow-md  " style="height: 60px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    WELCOME
                </div>
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    ON BOARD!
                </div>

            </div>
        </div>

    </div>
    <div class="bg-white2 "
        style="height: 500px ; width:350px ;  margin-left:50px;  margin-top:80px ; border-radius: 6px; ">
        <div class=" text-backSingin flex justify-center font-inter text-xl font-semibold leading-7 tracking-wide text-center"
            style="padding-top:43px;">
            Forgotten reservation number?
        </div>
        <div class="text-backSingin flex justify-center">We will send you an email with instructions</div>
        @if (session()->has('message'))
            <div class="text-green-500 text-center mt-4">{{ session('message') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="text-red-500 text-center mt-4">{{ session('error') }}</div>
        @endif
        <div>
            <form>
                <div class="grid gap-6 mb-4 md:grid-cols-2 ">
                    <div style="padding:20px ; padding-top:40px;">
                        <label class="block mb-2 text-sm font-medium text-backSingin dark:text-white">ARRIVAL
                            DATE</label>
                        <input id="arrivaldate" wire:model="arrivaldate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   focus:border-teal-700 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white shadow-lg  dark:focus:border-teal-700" />
                        @error('arrivaldate')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div style="padding-left:20px ; ">
                        <label class="block mb-2 text-sm font-medium text-backSingin dark:text-white">EMAIL OR PHONE
                            NUMBER</label>
                        <input id="emailorphone" wire:model="emailorphone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-teal-700 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white shadow-lg dark:focus:border-teal-700" />
                        @error('emailorphone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div style="width: 310px; height : 45px; " class=" text-center"> <button
                                wire:click='retrieveReservationNumber' type="button"
                                class="bg-blu text-backSingin font-bold text-xl-center rounded-md drop-shadow-md"
                                style="width: 310px; height : 45px; top: 714px; left: 133px; ">
                                Retrieve the reservation number
                            </button></div>
                        <div style="width: 310px; height : 45px; " class="pt-2 text-center">
                            <button wire:click='showSignin' type="button"
                                class="bg-white text-backSingin font-bold text-xl-center rounded-md drop-shadow-md"
                                style="width: 310px; height : 45px; top: 714px; left: 133px; ">Back</button>
                        </div>
                        <p>res : {{ $res }} </p>

                    </div>


                </div>


        </div>
        </form>
    </div>


</div>
