<x-layouts.guest_two>
    <x-page-banner title="Test Components Page" subtitle="Demonstrating reusable components" />

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Content Section</h2>
                    <p class="text-lg text-gray-600">This demonstrates how our reusable components can be used on any page</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-8">
                    <p class="mb-4">The page banner and CTA components can be used on any page for a consistent look and feel throughout the application.</p>
                    <p>Both components include all the styling and animations they need, making implementation simple and consistent.</p>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section 
        title="Ready to Use Our Components?" 
        subtitle="These components can be reused across the entire application for a consistent experience"
        buttonText="Main Action"
        buttonUrl="#" 
        secondButtonText="Secondary Action" 
        secondButtonUrl="#" 
        :showStats="true"
    />
</x-layouts.guest_two> 