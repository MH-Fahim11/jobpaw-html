document.addEventListener("DOMContentLoaded", function() {
    const researchPapers = [
        {
            image: "../images/blog/blog-1.png",
            title: "Guide to HR Adviser and Clients Lessening",
            publicationDate: "2023-05-15",
            authors: "John DOE",
            abstract: "This paper explores various deep learning techniques for image recognition, including convolutional neural networks (CNNs), recurrent neural networks (RNNs), and deep belief networks (DBNs). It discusses the applications of these techniques in computer vision tasks such as object detection, image classification, and semantic segmentation.",
        },
        {
            image: "../images/blog/blog-2.png",
            title: "Top Skin care tips for oily skins",
            publicationDate: "2023-05-15",
            authors: "Michel Jackson",
            abstract: "This paper explores various deep learning techniques for image recognition, including convolutional neural networks (CNNs), recurrent neural networks (RNNs), and deep belief networks (DBNs). It discusses the applications of these techniques in computer vision tasks such as object detection, image classification, and semantic segmentation.",
        },
        {
            image: "../images/blog/blog-3.png",
            title: "Outstanding island for winter sun",
            publicationDate: "2023-05-15",
            authors: "Omar sanny",
            abstract: "This paper explores various deep learning techniques for image recognition, including convolutional neural networks (CNNs), recurrent neural networks (RNNs), and deep belief networks (DBNs). It discusses the applications of these techniques in computer vision tasks such as object detection, image classification, and semantic segmentation.",
        },
    ];

    const researchPapersList = document.getElementById("research-papers-list");

    function createSlug(sentence) {
        return sentence
            .toLowerCase()
            .replace(/[^a-zA-Z0-9 -]/g, "")
            .replace(/\s+/g, "-")
            .replace(/-+/g, "-")
            .trim();
    }

    researchPapers.forEach((paper, index) => {
        const paperCard = document.createElement("div");
        paperCard.className = "col-md-6 col-lg-4";
        paperCard.innerHTML = `
            <div class="item">
                <div class="blog-card" style="animation-delay: ${index * 100}ms;">
                    <div class="blog-card__image">
                        <img src="${paper.image}" alt="${paper.title}">
                    </div>
                    <div class="blog-card__content">
                        <div style="width: 140px;" class="blog-card__date">${paper.publicationDate}</div>
                        <h3 class="blog-card__title mt-4">
                            <a href="/professionals/consult-research-work-details.php">${paper.title}</a>
                        </h3>
                        <p class="blog-card__info">${paper.abstract.slice(0, 70)}...</p>
                        <p>Author: ${paper.authors}</p>
                        <a href="/professionals/consult-research-work-details.php" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        `;
        researchPapersList.appendChild(paperCard);
    });
});
