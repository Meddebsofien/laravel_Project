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
        style="height: 480px ; width:350px ;  margin-left:50px;  margin-top:100px ; border-radius: 6px; ">
        <div class=" text-backSingin flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center"
            style="padding-top:43px;">
            AUTHENTIFICATION
        </div>
        <div>
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div style="padding:20px ; padding-top:81px;">
                        <label class="block mb-2 text-sm font-medium text-backSingin dark:text-white">N°
                            Reservation</label>
                        <input type="password" id="password" wire:model="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   focus:border-teal-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white shadow-lg dark:focus:border-teal-700"
                            placeholder="******" required />
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0);" wire:click='lostnumber'
                            class="text-linklost text-sm underline">Lost reservation number?</a>
                    </div>


                </div>
            </form>
        </div>

    </div>

    <div class="bg-white2 text-center mt-10 ml-36" style="width: 170px; height : 51px; ">
        <button wire:click="login" class="bg-white text-backSingin font-bold text-xl-center rounded-md drop-shadow-md"
            style="width: 170px; height : 51px; top: 714px; left: 133px; ">
            VALIDATION
        </button>
    </div>




</div>
