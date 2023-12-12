const AdminApiVersion = "/secure/administration/api";
const AdminApiRoutes = {
    Login: AdminApiVersion + "/auth/login",
    Logout: AdminApiVersion + "/auth/logout",


    PageDelete: AdminApiVersion + "/page",
};
export default AdminApiRoutes;
