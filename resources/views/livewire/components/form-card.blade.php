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
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg text-teal-800 bg-white2  shadow cursor-pointer hover:bg-gray-200 
                      ">
                    <i class="fas fa-user-cog"></i>
                </button>
                <button wire:click="showFormquestion" style="width: 83px; height: 54px;"
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
                    class="w-12 h-12 flex justify-center items-center rounded-t-lg  bg-cyan-700 text-white2 shadow cursor-pointer hover:bg-gray-200 
                     ">
                    <i class="fas fa-credit-card"></i>
                </button>
            </div>

            <div class="p-2">

                <form wire:submit.prevent="submit" class="space-y-4">
                    <div class="flex flex-col" style="width:350px ; height:470px ;">
                        <div class="font-inter text-xl font-semibold  text-backSingin">ADDITIONNAL SERVICES</div>
                        <table class="border rounded-lg">
                            <tr class="bg-teal-800 mt-5 font-semibold text-white flex flex-row  w-80 items-center justify-around"
                                style="font-size: 10px;  height: 34px;">
                                <th>Additionnal services</th>
                                <th>Day</th>
                                <th>Person</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                            <tr class="bg-white  text-backSingin flex flex-row  shadow-md text-start w-80 items-center justify-around"
                                style="font-size: 10px; height: 34px ;">
                                <td>Tourist tax</td>
                                <td style="padding-left: 50px;">{{ $bookinginfo->number_of_nights }}</td>
                                <td style="padding-left: 20px;">{{ $bookinginfo->number_of_guests }}</td>
                                <td style="padding-left: 20px;">2$</td>
                                <td style="padding-left: 20px;">{{ $bookinginfo->total_payout }}$</td>
                            </tr>
                            <tr class="bg-white  text-backSingin flex flex-row text-start  shadow-md  w-80 items-center justify-around"
                                style="font-size: 10px; height: 34px; ">
                                <td>Total</td>
                                <td style="padding-left: 50px;"></td>
                                <td style="padding-left: 20px;"></td>
                                <td style="padding-left: 20px;"></td>
                                <td style="padding-left: 35px;">{{ $bookinginfo->total_payout }}$</td>
                            </tr>
                        </table>



                        <div class="pt-8">
                            <div class="font-inter text-xl font-semibold  text-backSingin">ADD A CARD</div>
                            <div class="bg-white2  shadow" style="width: 320px; height: 208.37px;">
                                <div class="pl-2">
                                    <label for="firstName" class="block text-sm font-medium text-backSingin">Name On
                                        Card</label>
                                    <input type="text" wire:model.defer="namecard" id="namecard"
                                        class="mt-1 block {{ $errors->has('namecard') ? 'border-red-600 ' : 'border-gray-300' }}  shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        style="width:300px;"
                                        wire:input="updateAndValidate('namecard', $event.target.value)" />
                                    @error('namecard')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="ml-2">
                                    <label for="name" class="block text-sm font-medium text-backSingin">Card
                                        Number</label>
                                    <input type="text" wire:model.defer="cardnumber" id="cardnumber"
                                        class="mt-1 block  {{ $errors->has('cardnumber') ? 'border-red-600 ' : 'border-gray-300' }} w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        style="width:300px; "
                                        wire:input="updateAndValidate('cardnumber', $event.target.value)" />
                                    @error('cardnumber')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-row justify-around">
                                    <div>
                                        <label class="block text-sm font-medium text-backSingin">Exp
                                            Day</label>
                                        <input type="text" wire:model.defer="expday" id="expday"
                                            class="mt-1 block w-36 shadow-sm sm:text-sm border-gray-300 rounded-md"
                                            wire:input="updateAndValidate('expday', $event.target.value)"
                                            {{ $errors->has('expday') ? 'border-red-600 ' : 'border-gray-300' }} />
                                        @error('expday')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-backSingin">Security
                                            Code</label>
                                        <input type="text" wire:model.defer="codesecurity" id="codesecurity"
                                            class="mt-1 block  shadow-sm w-32 sm:text-sm border-gray-300 rounded-md"
                                            wire:input="updateAndValidate('codesecurity', $event.target.value)"
                                            {{ $errors->has('codesecurity') ? 'border-red-600 ' : 'border-gray-300' }} />
                                        @error('codesecurity')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>

                    <div class="bg-white2 text-center mt-10 ml-24" style="width: 170px; height : 51px; ">
                        <button wire:click="showconfirmation" type="submit"
                            class="bg-white text-backSingin font-bold text-xl-center rounded-md drop-shadow-md"
                            style="width: 170px; height : 51px; top: 714px; left: 133px; ">
                            VALIDATION
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
