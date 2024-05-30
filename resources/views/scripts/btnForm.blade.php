<script>
      function btnOpenFormAddGuru() {
        document.getElementById('modal-report').style.display = 'block'
      }
      function btnCloseFormAddGuru() {
        document.getElementById('modal-report').style.display = 'none'
      }

      let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.toggle('active', index === step);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }
    </script>