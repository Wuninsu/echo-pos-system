<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ public_path('assets/css/invoice.css') }}" type="text/css" media="all" />
</head>

<body>
    <div>
        @php
            $settings = App\Models\SettingsModel::getSettingsData(); // Get all settings once
        @endphp
        <div class="py-4">
            <div class="px-14 py-6">
                <table class="w-full border-collapse border-spacing-0">
                    <tbody>
                        <tr>
                            <td class="w-full align-top">
                                <div>
                                    <img src="{{ public_path('storage/' . ($settings['logo'] ?? NO_IMAGE)) }}"
                                        class="h-12" />
                                </div>
                            </td>

                            <td class="align-top">
                                <div class="text-sm">
                                    <table class="border-collapse border-spacing-0">
                                        <tbody>
                                            <tr>
                                                <td class="border-r pr-4">
                                                    <div>
                                                        <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                                                        <p class="whitespace-nowrap font-bold text-main text-right">
                                                            April 26, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="pl-4">
                                                    <div>
                                                        <p class="whitespace-nowrap text-slate-400 text-right">Invoice #
                                                        </p>
                                                        <p class="whitespace-nowrap font-bold text-main text-right">
                                                            BRA-00335</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-slate-100 px-14 py-6 text-sm">
                <table class="w-full border-collapse border-spacing-0">
                    <tbody>
                        <tr>
                            <td class="w-1/2 align-top">
                                <div class="text-sm text-neutral-600">
                                    <p class="font-bold">Supplier Company INC</p>
                                    <p>Number: 23456789</p>
                                    <p>VAT: 23456789</p>
                                    <p>6622 Abshire Mills</p>
                                    <p>Port Orlofurt, 05820</p>
                                    <p>United States</p>
                                </div>
                            </td>
                            <td class="w-1/2 align-top text-right">
                                <div class="text-sm text-neutral-600">
                                    <p class="font-bold">Customer Company</p>
                                    <p>Number: 123456789</p>
                                    <p>VAT: 23456789</p>
                                    <p>9552 Vandervort Spurs</p>
                                    <p>Paradise, 43325</p>
                                    <p>United States</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="px-14 py-10 text-sm text-neutral-700">
                <table class="w-full border-collapse border-spacing-0">
                    <thead>
                        <tr>
                            <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
                            <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Product details</td>
                            <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Quantity</td>
                            <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Unit Price</td>
                            <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Amount</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b py-3 pl-3">1.</td>
                            <td class="border-b py-3 pl-2">Montly accountinc services</td>
                            <td class="border-b py-3 pl-2 text-right">$150.00</td>
                            <td class="border-b py-3 pl-2 text-center">1</td>
                            <td class="border-b py-3 pl-2 pr-3 text-right">$180.00</td>
                        </tr>
                        <tr>
                            <td class="border-b py-3 pl-3">2.</td>
                            <td class="border-b py-3 pl-2">Taxation consulting (hour)</td>
                            <td class="border-b py-3 pl-2 text-right">$60.00</td>
                            <td class="border-b py-3 pl-2 text-center">2</td>
                            <td class="border-b py-3 pl-2 pr-3 text-right">$144.00</td>
                        </tr>
                        <tr>
                            <td class="border-b py-3 pl-3">3.</td>
                            <td class="border-b py-3 pl-2">Bookkeeping services</td>
                            <td class="border-b py-3 pl-2 text-right">$50.00</td>
                            <td class="border-b py-3 pl-2 text-center">1</td>
                            <td class="border-b py-3 pl-2 pr-3 text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <table class="w-full border-collapse border-spacing-0">
                                    <tbody>
                                        <tr>
                                            <td class="w-full"></td>
                                            <td>
                                                <table class="w-full border-collapse border-spacing-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="border-b p-3">
                                                                <div class="whitespace-nowrap text-slate-400">Net total:
                                                                </div>
                                                            </td>
                                                            <td class="border-b p-3 text-right">
                                                                <div class="whitespace-nowrap font-bold text-main">
                                                                    $320.00</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-3">
                                                                <div class="whitespace-nowrap text-slate-400">VAT total:
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <div class="whitespace-nowrap font-bold text-main">
                                                                    $64.00</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-main p-3">
                                                                <div class="whitespace-nowrap font-bold text-white">
                                                                    Total:</div>
                                                            </td>
                                                            <td class="bg-main p-3 text-right">
                                                                <div class="whitespace-nowrap font-bold text-white">
                                                                    $384.00</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="px-14 text-sm text-neutral-700">
                <p class="text-main font-bold">PAYMENT DETAILS</p>
                <p>Banks of Banks</p>
                <p>Bank/Sort Code: 1234567</p>
                <p>Account Number: 123456678</p>
                <p>Payment Reference: BRA-00335</p>
            </div>

            <div class="px-14 py-10 text-sm text-neutral-700">
                <p class="text-main font-bold">Notes</p>
                <p class="italic">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                    industries
                    for previewing layouts and visual mockups.</p>
                </dvi>

                <footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
                    Supplier Company
                    <span class="text-slate-300 px-2">|</span>
                    info@company.com
                    <span class="text-slate-300 px-2">|</span>
                    +1-202-555-0106
                </footer>
            </div>
        </div>
</body>

</html>
