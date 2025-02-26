<x-dashboard>
    <div class="flex flex-col md:flex-row items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 md:mb-0">Users</h2>
    </div>

    <div class="bg-white shadow-md rounded-sm overflow-hidden">
        <div class="px-4 py-5 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-800">List of users</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Firstname
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Lastname
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col"
                            class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">#4</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Rae</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">White</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">+1 (587) 609-82</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">gxtob@mailinator.com</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                active
                            </span>
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">#7</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Irma</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Kline</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">+1 (157) 697-51</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">pinopsizu@mailinator.com
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                active
                            </span>
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">#8</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Cassidy</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Roach</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">+1 (372) 575-74</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">qusotifyh@mailinator.com
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                active
                            </span>
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    <tr>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">#10</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Susan</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Heath</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">+1 (265) 988-24</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">tomygady@mailinator.com
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                active
                            </span>
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">#12</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Chloe</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-900">Terrell</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">+1 (146) 323-16</td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">tabyzefaw@mailinator.com
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                active
                            </span>
                        </td>
                        <td class="px-6 py-1 text-xs whitespace-nowrap text-gray-500">
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard>
