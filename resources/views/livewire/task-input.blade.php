<div>
    <form wire:submit.prevent="confirm">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">タイトル</label>
                        <input wire:model="posts.title" type="text" name="title" id="title" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"  placeholder="目標のタイトル">
                        @error('posts.title')
                        <span class="block text-xs font-medium text-red-700">{{ 'タイトルは' . $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="body" class="block text-sm font-medium text-gray-700">詳細</label>
                        <div class="mt-1">
                            <textarea wire:model="posts.body" id="body" name="body" rows="5" cols="90" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="目標の詳細を記載してください。"></textarea>
                        </div>
                        @error('posts.body')
                        <span class="block text-xs font-medium text-red-700">{{ '詳細は' . $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">確認</button>
            </div>
        </div>
    </form>
</div>
