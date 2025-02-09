        function filterProjects() 
        {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const projects = document.querySelectorAll('.project-card');
            const selectedSkills = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.nextElementSibling.textContent);

            projects.forEach(project => {
                const skills = project.getAttribute('data-skills').split(', ');
                const isVisible = selectedSkills.length === 0 || skills.some(skill => selectedSkills.includes(skill));
                project.style.display = isVisible ? 'block' : 'none';
            });
        }