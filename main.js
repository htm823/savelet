'use strict';

const saveForm  = document.getElementById('save-form');
const savedName = document.getElementById('name');
const savedUrl  = document.getElementById('url');

saveForm.addEventListener('submit', async (e) => {
	e.preventDefault();

	const formData = new FormData(e.target);

	const response = await fetch('save.php', {
		method: 'POST',
		body: formData,
	});

	const postData = response.json();

	if (postData.success) {
		window.location.href = 'index.php';
	}

	savedName.value = '';
	savedUrl.value  = '';
});
