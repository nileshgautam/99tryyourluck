export const Toast = (type, text) => {
	if (type === "error") {
		return Toastify({
			text: text || "Error",
			duration: 3000,
			close: true,
			gravity: "top",
			avatar: "assets/img/err.png",
			position: "right",
			stopOnFocus: true,
			style: {
				background: "var(--mbr-danger)",
				paddingBlock: "1.5rem",
			},
		}).showToast();
	} else if (type === "success") {
		return Toastify({
			text: text || "Success",
			duration: 3000,
			close: true,
			gravity: "top",
			avatar: "assets/img/success.png",
			position: "right",
			stopOnFocus: true,
			style: {
				background: "var(--mbr-success)",
				paddingBlock: "1.5rem",
			},
		}).showToast();
	} else if (type === "info") {
		return Toastify({
			text: text || "Info",
			duration: 3000,
			close: true,
			gravity: "top",
			avatar: "assets/img/info.png",
			position: "right",
			stopOnFocus: true,
			style: {
				background: "var(--mbr-info)",
				paddingBlock: "1.5rem",
			},
		}).showToast();
	} else if (type === "warning") {
		return Toastify({
			text: text || "Warning",
			duration: 3000,
			close: true,
			gravity: "top",
			avatar: "assets/img/warning.png",
			position: "right",
			stopOnFocus: true,
			style: {
				background: "var(--mbr-warning)",
				paddingBlock: "1.5rem",
			},
		}).showToast();
	}
};
