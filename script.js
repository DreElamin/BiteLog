function analyzeImage() {
  const input = document.getElementById("imageInput");
  const file = input.files[0];

  if (!file) {
    alert("Please upload an image first.");
    return;
  }

  // Placeholder for image analysis logic
  const resultsSection = document.getElementById("results");

  // Simulate response
  const fakeData = {
    food: "Pasta",
    calories: 450,
    protein: "12g",
    fat: "15g",
    carbs: "60g"
  };

  resultsSection.innerHTML = `
    <h2>Nutrition Facts</h2>
    <p><strong>Food:</strong> ${fakeData.food}</p>
    <p><strong>Calories:</strong> ${fakeData.calories}</p>
    <p><strong>Protein:</strong> ${fakeData.protein}</p>
    <p><strong>Fat:</strong> ${fakeData.fat}</p>
    <p><strong>Carbohydrates:</strong> ${fakeData.carbs}</p>
  `;
}
