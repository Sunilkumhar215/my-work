  @extends('frontend.layouts.main')

  @section('main-container')
  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.gkontechnologies.com/" />
  <!-- Tailwind CSS & Bootstrap Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://gkontechnologies.com/customcss.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if(session('success'))
  <script>
    Swal.fire({
      title: 'Success!',
      text: "{{ session('success') }}",
      icon: 'success',
      confirmButtonText: 'Cool',
      confirmButtonColor: '#6366f1', // Aapki theme ka primary color
      timer: 3000, // 3 seconds baad apne aap band ho jayega
      timerProgressBar: true,
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      },
      customClass: {
        popup: 'rounded-4' // Modern rounded corners
      }
    });
  </script>
  @endif
  <!-- Ready to Expand Section -->
  <section
      class="bg-gradient-to-r from-sky-600 to-sky-500 text-white py-20">
      <div
          class="container mx-auto max-w-screen-xl px-6 flex flex-col md:flex-row md:space-x-12">
          <!-- Left Info -->
          <div
              class="md:w-1/3 mb-10 md:mb-0 flex flex-col justify-center animate-fadeInLeft">
              <h3 class="text-2xl md:text-3xl font-extrabold mb-4">
                  For Project Inquiries
              </h3>
              <p class="mb-6 max-w-sm text-sky-100">
                  We appreciate your interest in Gkon Technologies. Fill out the
                  form and we will reach you in less than 24 hours.
              </p>
          </div>

          <!-- Contact Form -->
          <form
              class="md:w-2/3 bg-white p-10 rounded-xl shadow-2xl max-w-4xl animate-fadeInRight"
              id="contact-form"
              action="{{ route('inquiry.store') }}"
              method="POST"
              enctype="multipart/form-data">

              <!-- Name -->
              <div class="mb-6">
                  <label class="block mb-2 text-sm font-semibold text-gray-700">
                      Full Name <sup class="text-red-600">*</sup>
                  </label>
                  <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Your full name"
                      required
                      class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 transition duration-300 shadow-sm hover:shadow-md" />
              </div>

              <!-- Phone + Country Code -->
              <div class="mb-6 grid grid-cols-3 gap-4 items-center">
                  <div class="col-span-1">
                      <select
                          name="countryCode"
                          class="w-full rounded-lg px-3 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md">
                          <option value="+91">🇮🇳 +91</option>
                          <option value="+1">🇺🇸 +1</option>
                          <option value="+44">🇬🇧 +44</option>
                          <option value="+971">🇦🇪 +971</option>
                          <option value="+1">🇨🇦 +1</option>
                      </select>
                  </div>
                  <div class="col-span-2">
                      <input
                          type="tel"
                          name="phone"
                          id="phone"
                          placeholder="Mobile Number"
                          required
                          pattern="[0-9]{7,15}"
                          class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md" />
                  </div>
              </div>

              <!-- Email + Budget -->
              <div class="mb-6 grid grid-cols-2 gap-4">
                  <div>
                      <label class="block mb-2 text-sm font-semibold text-gray-700">
                          Email Address <sup class="text-red-600">*</sup>
                      </label>
                      <input
                          type="email"
                          id="email"
                          name="email"
                          required
                          placeholder="you@example.com"
                          class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md" />
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-semibold text-gray-700">
                          Budget (In USD)
                      </label>
                      <select
                          id="budget"
                          name="budget"
                          class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md">
                          <option value="">Select Budget</option>
                          <option>$500 - $1000</option>
                          <option>$1000 - $5000</option>
                          <option>$5000 - $10,000</option>
                          <option>$10,000+</option>
                      </select>
                  </div>
              </div>

              <!-- File Upload -->
              <div class="mb-6 max-w-md mx-auto">
                  <label class="block mb-3 text-sm font-semibold text-gray-700">
                      Attach Any File!
                  </label>

                  <label
                      for="file-upload"
                      class="cursor-pointer border-2 border-dashed border-gray-300 rounded-lg p-8 flex flex-col items-center justify-center text-center hover:bg-gray-50 transition duration-300">
                      <input type="file" name="file" id="file-upload" class="sr-only" />
                      <span class="mt-3 text-gray-600 text-sm">Browse or Drag and Drop File Here</span>
                  </label>
              </div>

              <!-- Message -->
              <div class="mb-6">
                  <label class="block mb-2 text-sm font-semibold text-gray-700">Message</label>
                  <textarea
                      id="message"
                      name="message"
                      rows="4"
                      placeholder="Write your project details here..."
                      required
                      class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md"></textarea>
              </div>

              <!-- Submit -->
              <button
                  type="submit"
                  class="bg-sky-600 hover:bg-sky-700 transition duration-300 w-36 h-16 rounded-full font-bold text-white text-lg shadow-lg hover:shadow-xl transform hover:scale-105 float-right">
                  SEND INQUIRY
              </button>
              @csrf
          </form>
          </section>
          @endsection