gsap.from(".box", {
    scrollTrigger: {
      trigger: ".trigger",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, // 少し上に移動させる
    opacity: 0,
    ease: "power2.out",
    // 複数要素を扱うプロパティ
    stagger: {
      from: "start", //左側から
      amount: 0.8 // 0.8秒おきに
    }
  });

  gsap.from(".anim_on2", {
    scrollTrigger: {
      trigger: "#concept",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, // 少し上に移動させる
    opacity: 0,
    ease: "power2.out",
    // 複数要素を扱うプロパティ
    stagger: {
      from: "start", //左側から
      amount: 0.8 // 0.8秒おきに
    }
  });

  gsap.from(".anim_on3", {
    scrollTrigger: {
      trigger: "#odt",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });

  gsap.from(".anim_on4", {
    scrollTrigger: {
      trigger: "#kodomo",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });

  gsap.from(".anim_on5", {
    scrollTrigger: {
      trigger: "#who",
      start: "top 300px bottom",
      end: "center top",
    //    markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 1.6 
    }
  });

  gsap.from(".anim_on6", {
    scrollTrigger: {
      trigger: "#aword",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });


  gsap.from(".anim_on7", {
    scrollTrigger: {
      trigger: "#stage",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });

  gsap.from(".anim_on8", {
    scrollTrigger: {
      trigger: "#workshop",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });
  gsap.from(".anim_on9", {
    scrollTrigger: {
      trigger: "#contact",
      start: "center bottom",
      end: "center top",
    //   markers: true
    },
    duration: 1.2,
    y: 15, 
    opacity: 0,
    ease: "power2.out",
    stagger: {
      from: "start", 
      amount: 0.8 
    }
  });