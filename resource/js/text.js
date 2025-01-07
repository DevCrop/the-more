let debounceTimeout;
const debounce = (func, delay) => {
  return (...args) => {
    clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(() => func(...args), delay);
  };
};

const fetchData = async (filters) => {
  try {
    const query = new URLSearchParams(filters).toString();
    const response = await fetch(`/api/work.php?${query}`);
    const data = await response.json();

    console.log(data); // 데이터를 처리하거나 UI를 업데이트하세요.
  } catch (error) {
    console.error("API 요청 실패:", error);
  }
};

const getFilters = () => {
  const filters = {
    search_term: document.getElementById("search_term").value,
    category_no:
      document.querySelector('input[name="category_no"]:checked')?.value || "",
    date:
      document.querySelector(".date-list button.active")?.dataset.date || "",
    extra4: document.querySelector('input[name="extra4"]:checked')?.value || "",
    extra1: document.querySelector('input[name="extra1"]:checked')?.value || "",
    page:
      document.querySelector(".no-pagination__link.--active span")
        ?.textContent || "1",
  };

  return filters;
};

const onSearchChange = debounce(() => {
  const filters = getFilters();
  fetchData(filters);
}, 300);

document
  .getElementById("search_term")
  .addEventListener("input", onSearchChange);

document.querySelectorAll('input[name="project_status"]').forEach((input) => {
  input.addEventListener("change", () => {
    const filters = getFilters();
    fetchData(filters);
  });
});

document.querySelectorAll(".date-list button").forEach((button) => {
  button.addEventListener("click", (event) => {
    document
      .querySelectorAll(".date-list button")
      .forEach((btn) => btn.classList.remove("active"));
    event.target.classList.add("active");

    const filters = getFilters();
    fetchData(filters);
  });
});

document.querySelectorAll('input[name="extra4"]').forEach((input) => {
  input.addEventListener("change", () => {
    const filters = getFilters();
    fetchData(filters);
  });
});

document.querySelectorAll('input[name="extra1"]').forEach((input) => {
  input.addEventListener("change", () => {
    const filters = getFilters();
    fetchData(filters);
  });
});

document.querySelectorAll(".no-pagination__link").forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();

    document
      .querySelectorAll(".no-pagination__link")
      .forEach((btn) => btn.classList.remove("--active"));
    event.currentTarget.classList.add("--active");

    const filters = getFilters();
    fetchData(filters);
  });
});
