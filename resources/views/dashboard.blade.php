<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="sinhvien">Sinh viên</a>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <textarea name="" class="textarea textarea-bordered w-full" rows="3" placeholder="heloo ae"></textarea>
                        <button class="btn btn-primary" value="Tweet">Submit</button>
                    </form>
                </div>
               </div>
        </div>
    </div>
</x-app-layout>
