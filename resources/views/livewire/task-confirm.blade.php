<div>
    <p for="title" class="block text-sm font-medium text-gray-700">以下確認して登録ボタンを押してください。</p>
    <div class="overflow-hidden shadow sm:rounded-md">
        <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <dl>
                    <div class="col-span-6 sm:col-span-4">
                        <dt for="title" class="block text-sm font-medium text-gray-700">タイトル</dt>
                        <dd class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            {{ @$posts['title'] }}
                        </dd>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <dt for="title" class="block text-sm font-medium text-gray-700">詳細</dt>
                        <dd class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            {!! nl2br(e(@$posts['body'])) !!}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button
                wire:click="submit"
                type="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">上記内容を送信</button>
        </div>

        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button
                wire:click="back"
                type="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">修正する</button>
        </div>
    </div>
</div>
