hljs.highlightAll();

document.querySelectorAll(".btn-clipboard").forEach((button) => {
  let tooltip = new bootstrap.Tooltip(button, {
    title: "Copy to clipboard",
    trigger: "hover"
  });

  button.addEventListener("click", async () => {
    const code = button
      .closest(".bd-code-snippet")
      .querySelector("code")
      .innerText
      .trim();

    try {
      await navigator.clipboard.writeText(code);

      // Häkchen anzeigen
      button
        .querySelector("use")
        .setAttribute("xlink:href", "#check2");

      // normalen Tooltip entfernen
      tooltip.dispose();

      // "Copied!"-Tooltip erzeugen
      tooltip = new bootstrap.Tooltip(button, {
        title: "Copied!",
        trigger: "manual"
      });

      tooltip.show();

      setTimeout(() => {
        // Copied-Tooltip entfernen
        tooltip.dispose();

        // Clipboard-Icon wiederherstellen
        button
          .querySelector("use")
          .setAttribute("xlink:href", "#clipboard");

        // normalen Tooltip wieder anlegen
        tooltip = new bootstrap.Tooltip(button, {
          title: "Copy to clipboard",
          trigger: "hover"
        });
      }, 800);

    } catch (error) {
      console.error("Kopieren fehlgeschlagen:", error);
    }
  });
});