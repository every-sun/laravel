const Ziggy = {"url":"http://127.0.0.1:8000","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"posts.index":{"uri":"\/","methods":["GET","HEAD"]},"post.create":{"uri":"post\/create","methods":["GET","HEAD"]},"post.show":{"uri":"post\/{id}","methods":["GET","HEAD"],"parameters":["id"]},"post.store":{"uri":"post","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
