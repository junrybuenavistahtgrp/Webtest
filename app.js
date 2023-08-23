const fs = require('fs');

		fs.writeFile('output.txt', 'Hello World.', err => {
		if (err) console.error(err);
		else console.log('Data written to file successfully.');
		});