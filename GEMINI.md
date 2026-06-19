# SYSTEM SKILLS & DEVELOPMENT GUIDELINES FOR SEU-USA

## 1. TECHNICAL STACK SKILLS
- **Framework:** Laravel (PHP) Blade templates.
- **Styling:** Tailwind CSS (utility classes only, fully responsive).
- **Interactions:** Alpine.js (for mobile menus, dropdowns, and basic client-side dynamic toggles).
- **Icons:** Strict rule - No emojis. Use inline SVGs with a thin line-style (stroke-width: 2px) and slate/amber transition colors.
- **Typography:** Outfit (Google Fonts) as primary font-sans.

## 2. BRAND COLOR TOKENS
- Primary Dark: `bg-slate-950` / `text-slate-950`
- Secondary Light: `bg-slate-50` / `text-slate-600`
- Accent Warm: `bg-amber-500` / `text-amber-500` (Amber-600 on hover)
- Borders: `border-slate-100` / `border-slate-200/60`

## 3. UI/UX RULES (WORLD CLASS STANDARDS)
- All navigation and footer configurations must be strictly modular. No view should contain static header or footer HTML.
- Layout master must load @vite assets or dynamic style sheets cleanly.
- Buttons must be pill-shaped (`rounded-full`) with elegant hover transition states.
- Grid containers must be fully responsive mobile-first (`grid-cols-1 md:grid-cols-2 lg:grid-cols-4`).