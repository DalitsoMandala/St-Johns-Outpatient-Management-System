<div>
<x-tabs :tabs="['register-patient', 'patients']" :active="2" >
    <!-- Tab 1 Content -->
    <div x-show="active === 0" x-transition>
        <h2 class="mb-2 text-lg font-semibold">Register Patient</h2>
  register patient
    </div>

    <!-- Tab 2 Content -->
    <div x-show="active === 1" x-transition>
        <h2 class="mb-2 text-lg font-semibold">Patients</h2>
      patients
    </div>
</x-tabs>

</div>
