import axios from "axios";

export const api = axios.create({
  baseURL: "http://localhost:8000/api",
});

api.interceptors.request.use((config) => {
  const token = localStorage.getItem("token");
  const tenant = localStorage.getItem("tenant"); // id ou slug

  if (token) config.headers.Authorization = `Bearer ${token}`;
  if (tenant) config.headers["X-Tenant"] = tenant;

  return config;
});