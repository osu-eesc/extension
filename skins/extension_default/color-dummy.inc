<?php
2 // $Id$
3
4 /**
5 * @file
6 * Color modules main settings file.
7 */
8
9 $info = array(
10
11 // Available colors and color labels used in theme.
12 'fields' => array(
13 'base' => t("Base"),
14 'background' => t("Background"),
15 'text' => t('Text'),
16 'link' => t('Link'),
17 'linkhover' => t('Hovered Link'),
18 'linkunderline' => t('Link underline'),
19 'slogan' => t('Slogan'),
20 'navigation' => t('Navigation'),
21 'navigationhover' => t('Navigation hover'),
22 'tab' => t('Tab'),
23 'blocktitle' => t('Block title'),
24 'border' => t('Border'),
25 'borderstrong' => t('Border strong'),
26 'fieldset' => t('Fieldset'),
27 'fieldsetborder' => t('Fieldset border'),
28 ),
29
30 // Pre-defined color schemes.
31 'schemes' => array(
32 'default' => array(
33 'title' => t('Gray (Default)'),
34 'colors' => array(
35 'base' => '#ffffff',
36 'background' => '#f8f8f8',
37 'text' => '#2e2e2e',
38 'link' => '#086782',
39 'linkhover' => '#e25401',
40 'linkunderline' => '#cfdde5',
41 'slogan' => '#e25400',
42 'navigation' => '#2e2e2d',
43 'navigationhover' => '#e25402',
44 'tab' => '#f5f4f3',
45 'blocktitle' => '#779125',
46 'border' => '#e1e1e1',
47 'borderstrong' => '#c4c4c4',
48 'fieldset' => '#fbfbfb',
49 'fieldsetborder' => '#e1e1e2',
50 ),
51 ),
52 'green1' => array(
53 'title' => t('Green 1'),
54 'colors' => array(
55 'base' => '#ffffff',
56 'background' => '#fbfbf6',
57 'text' => '#3d3d3d',
58 'link' => '#899833',
59 'linkhover' => '#e14601',
60 'linkunderline' => '#e3eac1',
61 'slogan' => '#899833',
62 'navigation' => '#8e9e35',
63 'navigationhover' => '#626c25',
64 'tab' => '#fbfbf6',
65 'blocktitle' => '#738b25',
66 'border' => '#e7e1ce',
67 'borderstrong' => '#d2c8aa',
68 'fieldset' => '#fdfdfb',
69 'fieldsetborder' => '#dad6c9',
70 ),
71 ),
72 'green2' => array(
73 'title' => t('Green 2'),
74 'colors' => array(
75 'base' => '#ffffff',
76 'background' => '#fbfbf6',
77 'text' => '#3d3d3d',
78 'link' => '#157a9c',
79 'linkhover' => '#e14601',
80 'linkunderline' => '#cfdde5',
81 'slogan' => '#e14601',
82 'navigation' => '#8e9e35',
83 'navigationhover' => '#626c25',
84 'tab' => '#fbfbf6',
85 'blocktitle' => '#779125',
86 'border' => '#e7e1ce',
87 'borderstrong' => '#d2c8aa',
88 'fieldset' => '#fdfdfb',
89 'fieldsetborder' => '#dad6c9',
90 ),
91 ),
92 'purple' => array(
93 'title' => t('Purple'),
94 'colors' => array(
95 'base' => '#ffffff',
96 'background' => '#fefafb',
97 'text' => '#2e2e2e',
98 'link' => '#6c0d28',
99 'linkhover' => '#e25401',
100 'linkunderline' => '#eac8d1',
101 'slogan' => '#e25401',
102 'navigation' => '#6c0d28',
103 'navigationhover' => '#83a80e',
104 'tab' => '#fbf3f6',
105 'blocktitle' => '#e25401',
106 'border' => '#f7d6e2',
107 'borderstrong' => '#d9a3b7',
108 'fieldset' => '#fefafb',
109 'fieldsetborder' => '#f7d6e2',
110 ),
111 ),
112 'red' => array(
113 'title' => t('Red'),
114 'colors' => array(
115 'base' => '#ffffff',
116 'background' => '#fefbfa',
117 'text' => '#2e2e2e',
118 'link' => '#b9400e',
119 'linkhover' => '#ef762f',
120 'linkunderline' => '#faded3',
121 'slogan' => '#ca592b',
122 'navigation' => '#b9400e',
123 'navigationhover' => '#7e2c0a',
124 'tab' => '#fdf6f4',
125 'blocktitle' => '#b9400e',
126 'border' => '#e8dad5',
127 'borderstrong' => '#e2bdae',
128 'fieldset' => '#fefbfa',
129 'fieldsetborder' => '#f7dad6',
130 ),
131 ),
132 'yellow' => array(
133 'title' => t('Yellow'),
134 'colors' => array(
135 'base' => '#ffffff',
136 'background' => '#f9faef',
137 'text' => '#383838',
138 'link' => '#8d8017',
139 'linkhover' => '#de4c01',
140 'linkunderline' => '#f4eebc',
141 'slogan' => '#afa02f',
142 'navigation' => '#a0a465',
143 'navigationhover' => '#6c6f42',
144 'tab' => '#f7f8ec',
145 'blocktitle' => '#afa02f',
146 'border' => '#e2e5c3',
147 'borderstrong' => '#dcd093',
148 'fieldset' => '#fbfbf8',
149 'fieldsetborder' => '#ddd7b6',
150 ),
151 ),
152 ),
153
154 // Images to copy over.
155 'copy' => array(
156 'logo.png',
157 ),
158
159 // CSS files (excluding @import) to rewrite with new color scheme.
160 'css' => array(
161 'colors.css',
162 ),
163
164 // Gradient definitions.
165 'gradients' => array(
166 array(
167 // (x, y, width, height).
168 'dimension' => array(0, 0, 0, 0),
169 // Direction of gradient ('vertical' or 'horizontal').
170 'direction' => 'vertical',
171 // Keys of colors to use for the gradient.
172 'colors' => array('link', 'text'),
173 ),
174 ),
175
176 // Color areas to fill (x, y, width, height).
177 'fill' => array(),
178
179 // Coordinates of all the theme slices (x, y, width, height)
180 // with their filename as used in the stylesheet.
181 'slices' => array(),
182
183 // Reference color used for blending. Matches the base.png's colors.
184 'blend_target' => '#ffffff',
185
186 // Preview files.
187 'preview_image' => 'color/preview.png',
188 'preview_css' => 'color/preview.css',
189
190 // Base file for image generation.
191 'base_image' => 'color/base.png',
192 );