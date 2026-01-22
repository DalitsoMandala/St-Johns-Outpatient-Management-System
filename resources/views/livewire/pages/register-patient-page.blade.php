<div>
    <x-tabs :tabs="['register_tab', 'patient_tab']" :default="'register_tab'">

        <x-slot:register_tab>
            <livewire:components.register-patient  />
        </x-slot:register_tab>

        <x-slot:patient_tab>

            <x-form-ui>
                <div
                    class="relative overflow-x-auto border shadow-xs bg-neutral-primary-soft rounded-base border-default">

                    <table class="w-full m-2 text-sm text-left rtl:text-right text-body">
                        <thead class="border-b bg-neutral-secondary-soft border-default">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b odd:bg-neutral-primary even:bg-neutral-secondary-soft border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b odd:bg-neutral-primary even:bg-neutral-secondary-soft border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b odd:bg-neutral-primary even:bg-neutral-secondary-soft border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b odd:bg-neutral-primary even:bg-neutral-secondary-soft border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Google Pixel Phone
                                </th>
                                <td class="px-6 py-4">
                                    Gray
                                </td>
                                <td class="px-6 py-4">
                                    Phone
                                </td>
                                <td class="px-6 py-4">
                                    $799
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    Red
                                </td>
                                <td class="px-6 py-4">
                                    Wearables
                                </td>
                                <td class="px-6 py-4">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </x-form-ui>
        </x-slot:patient_tab>

    </x-tabs>
</div>
